<?php
function country_from_phone($number)
{
    $phoneCodes = json_decode(file_get_contents("phone-codes.json"));
    foreach ($phoneCodes as $value) {
        $mask = preg_replace('/[+() -]/', '', $value->mask);
        $number = preg_replace('/[+() -]/', '', $number);
        for ($i = 0; $i < min(strlen($mask), strlen($number)); $i++) {
            if ($number[$i] != $mask[$i] && $mask[$i]!='#')
                break;
            else if ($mask[$i] == '#' && !preg_match('/[0-9]/', $number[$i]))
                break;
        }
        if ($i == strlen($mask) && $i == strlen($number)) {
            return $value->name_en;
        }
    }
    return "Invalid phone number";
}