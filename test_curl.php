<?php

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://datawarehouse.dbd.go.th/profitloss/year/5/0105562192194/',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>'yearFilter=2564&compareType=YEAR&compareBizSize=SAME&compareBizArea=TH&compareAvgType=MEDIAN&comparePage=profitloss&module=JURISTIC',
//   CURLOPT_HTTPHEADER => array(
//     'authority: datawarehouse.dbd.go.th',
//     'accept: */*',
//     'accept-language: en-US,en;q=0.9,th;q=0.8',
//     'content-type: application/x-www-form-urlencoded; charset=UTF-8',
//     'cookie: 


//      visid_incap_2466346=fFGh+8M7SFaxifTdMKoZnUjY/WMAAAAAQUIPAAAAAAD3mgci5Y7/TgPQGYThaQly; 
//      incap_ses_8225_2466346=JFVAK2H9TTsnIsHbTRIlckjY/WMAAAAAIlxqTEYZtBAFiXv/LWo2bg==; 
//      visid_incap_2466345=qSoUVPWSSvaITxyUwgSNmqrY/WMAAAAAQUIPAAAAAACArFcScBcf5318wrragjyP; 
//      incap_ses_8225_2466345=bV8jX140SR0zXsHbTRIlcqrY/WMAAAAAmIKS2rNcEjp5squYaXyJPA==; 
//      visid_incap_2466341=woduJhdETzuOSaTxC4wcjC3Z/WMAAAAAQUIPAAAAAAAtOro8PF7g8GROW4Bg+69n; 
//      incap_ses_8225_2466341=N/VeKXfPdw8Yq8HbTRIlci3Z/WMAAAAATcrzwVfX1JBf3ybXDAzZ3Q==; 
//      visid_incap_2466344=LYKzAHhlTT+k0wXA3ekWw0PZ/WMAAAAAQUIPAAAAAACdH+C/zDxuYLt9aQgIUO/g; 
//      incap_ses_8225_2466344=QXqXAtIQFlvZt8HbTRIlckPZ/WMAAAAANI1p6+2JIDAZA6x8ds2AGQ==; 
//      SESSION=YTg5NDVjZDQtYzkzMC00MWUyLTkzYjAtNmQxOGQ2MTBlZmRh; 
//      search=; 

//      _ga=GA1.1.1464748291.1677580613; 
//      BIGipServerDWH_Pool=1096788160.25371.0000; 
//      cwc_consent_xta67tKmkWfvDywqWU3WUgik=eyJjb25zZW50VmVyc2lvbiI6IjMiLCJwdXJwb3NlcyI6eyIyNDAwMyI6ImluZm9ybWVkIiwiMjQwMDQiOiJhbGxvdyIsIjI0MDA1IjoiYWxsb3cifSwic2Vzc2lvbl9pZCI6IjgwY2NjZTNhLTM3ZjQtNDNhZS04MDg0LWEwNTAzZmFmNWUzOSIsInNjcmlwdFZlcnNpb24iOjEsImxhc3RVcGRhdGVkIjoiMTY3NzU4MDYxNjE4MyJ9; 
//      TS0162c10e=01554f3719b8ca41ec455585b72d43baddae4d1d4117589fc1fab26081c6d6f8828b0f1bd8b850574a0329ec76fde1aa53a89dd1708393dc6b7c907ab210c30b5d1c1c20f6f1d459a6188d990574b07e53c482537b46b848b8995a9f4da3ef960c5fe9a7da; 
//      _ga_NSBDH4V63E=GS1.1.1677580612.1.1.1677581076.0.0.0; 
//      incap_ses_8225_2466344=Ch3JLHBcXRsb/MLbTRIlctDb/WMAAAAAEiAQ9Rco0t9m26YgntFGYg==; 
//      visid_incap_2466344=VWOSFyUcTBqjI2hAN9PTddDb/WMAAAAAQUIPAAAAAABkm/wwUvw2tYhDWyV3ycH3; 
//      BIGipServerDWH_Pool=1080010944.25371.0000; 
//      SESSION=YTllZDBlYTctODNmNS00ODA1LWEzNTEtYjVhODAzZDBlY2Ey; 
//      TS0162c10e=01554f371930db250873c910c3a4bfaa63e136e2b99c286332c8a16337b727c7e45991dc2b0144f858cba0d61db6ee31d8cc580eab32cd33977225a2bb7452acc87413f9a154d8e95948ead18e50f9a99bc0b79134e04e619677bed88ab3f65d27d41420f0; 
//      search=',


//     'origin: https://datawarehouse.dbd.go.th',
//     'referer: https://datawarehouse.dbd.go.th/company/profile/5/0105562192194/',
//     'sec-ch-ua: "Chromium";v="110", "Not A(Brand";v="24", "Google Chrome";v="110"',
//     'sec-ch-ua-mobile: ?0',
//     'sec-ch-ua-platform: "Windows"',
//     'sec-fetch-dest: empty',
//     'sec-fetch-mode: cors',
//     'sec-fetch-site: same-origin',
//     'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',
//     'x-requested-with: XMLHttpRequest'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;
$ch = curl_init('https://datawarehouse.dbd.go.th/index');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// get headers too with this line
curl_setopt($ch, CURLOPT_HEADER, 1);
$result = curl_exec($ch);

// var_dump($result);
// get cookie
// multi-cookie variant contributed by @Combuster in comments
preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
$cookies = array();
foreach($matches[1] as $item) {
    parse_str($item, $cookie);
    $cookies = array_merge($cookies, $cookie);
}
echo "<pre>";
var_dump($cookies);
echo "</pre>";
$text = '';
foreach ($cookies as $key => $value) {
    $text .= $key."=".$value.';';
}

echo $text;