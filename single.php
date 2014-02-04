<?
the_post();

$postFormat = get_post_format();
$postFormatTemplate = __DIR__ . "/single/" . $postFormat . ".php";

if (file_exists($postFormatTemplate)) {
  include $postFormatTemplate;
} else {
  include __DIR__ . "/single/default.php";
}
