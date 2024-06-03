<?php
$ch = curl_init('https://datawarehouse.dbd.go.th/index');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$result = curl_exec($ch);
preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
$cookies = array();
foreach($matches[1] as $item) {
    parse_str($item, $cookie);
    $cookies = array_merge($cookies, $cookie);
}

$text = '';
foreach ($cookies as $key => $value) {
    $text .= $key."=".$value.';';
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://datawarehouse.dbd.go.th/profitloss/year/5/0105553057409/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'yearFilter=2564&compareType=YEAR&compareBizSize=SAME&compareBizArea=TH&compareAvgType=MEDIAN&comparePage=profitloss&module=JURISTIC',
  CURLOPT_HTTPHEADER => array(
    'authority: datawarehouse.dbd.go.th',
    'accept: */*',
    'accept-language: en-US,en;q=0.9,th;q=0.8',
    'content-type: application/x-www-form-urlencoded; charset=UTF-8',
    'cookie:'.$text,
    'origin: https://datawarehouse.dbd.go.th',
    'referer: https://datawarehouse.dbd.go.th/company/profile/5/0105553057409/',
    'sec-ch-ua: "Chromium";v="110", "Not A(Brand";v="24", "Google Chrome";v="110"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-origin',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
    'x-requested-with: XMLHttpRequest'
  ),
));

$response = curl_exec($curl);

curl_close($curl);


$dom = new DOMDocument();
@$dom->loadHTML('<?xml encoding="utf-8" ?>'.$response);
$divs = $dom->getElementsByTagName('*');
$award = 0;
$i = 0;
$arr_ins = [];
$tbody = 0;
foreach ($divs as $div) {
    // print_r($div->tagName);

    if($div->tagName == 'thead'){
        $thead = 0;
        $arr_thead = [];
        foreach ($div->getElementsByTagName('th') as $key => $value) {
            $thead++;
            if($thead > 1 && $thead <= 6){
                $arr_thead[] = trim($value->textContent);
            }
        }
        $arr_ins[] = $arr_thead;
    }

    if($div->tagName == "tbody" && $tbody == '0'){
        $tbody++;
        foreach ($div->getElementsByTagName('tr') as $k_tr => $tr) {
            $c_rd = 0;
            $tr_arr = [];
            foreach ($tr->getElementsByTagName('td') as $k_td => $td) {
                $c_rd++;
                if(($c_rd%2) == 1){
                    $tr_arr[] = str_replace(",","",$td->textContent);
                }
            }
            $arr_ins[] = $tr_arr;
        }
    }

}
// echo "<pre>";
// print_r($arr_ins);
// echo "</pre>";
$arr = [];
foreach ($arr_ins[0] as $key => $value) {
    $arr[] = [
        $value,
        $arr_ins[1][$key],
        $arr_ins[2][$key],
        $arr_ins[3][$key],
        $arr_ins[4][$key],
        $arr_ins[5][$key],
        $arr_ins[6][$key],
        $arr_ins[7][$key],
        $arr_ins[8][$key],
        $arr_ins[9][$key],
        $arr_ins[10][$key],
    ];
}

echo "<pre>";
print_r($arr);
echo "</pre>";