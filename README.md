# XMLtoJSON

Simple Xml to Json with curl for Ubiflow Platform

* unzip.php decompress file from source ubiflow
* XmlToJson.php class to Xml to json
* index.php viewing the Xml file in Json
* curl.php recovering the xml to json file


```
<?php

class XmlToJson {

	public function Parse ($url) {

		$fileContents= file_get_contents($url);

		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

		$fileContents = trim(str_replace('"', "'", $fileContents));

		$simpleXml = simplexml_load_string($fileContents);

		$json = json_encode($simpleXml);

		return $json;

	}

}

?>
```


```
<?php

include 'XmlToJson.php';

print XmlToJson::Parse("http://your_url/XML_SRC/ag170960.xml" );

?>
```

<https://www.yoh.im>

![Yoim logo](https://yoh.im/assets/img/vivaldi-logo.png "YOIM logo")