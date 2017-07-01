<?php

/*
** Function generating json response based on:
** https://gist.github.com/james2doyle/33794328675a6c88edd6
*/

function json_response($data = null, $code = 200)
{
    // clear the old headers
    header_remove();
    // set the actual code
    http_response_code($code);
    // set the header to make sure cache is forced
    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
    // treat this as json
    header('Content-Type: application/json;charset=utf-8');
    $status = array(
        200 => '200 OK',
        400 => '400 Bad Request',
        422 => 'Unprocessable Entity',
        500 => '500 Internal Server Error'
        );
    // ok, validation error, or failure
    header('Status: '.$code);
    // return the encoded json
    return json_encode(array(
        'status' => $code, // success or not?
        'data' => $data
        ));
}