<?php
/**
 * Created by PhpStorm.
 * User: Büro
 * Date: 11.05.2017
 * Time: 15:12
 */

$content = "require/content.xml";

if(file_exists($content)){
    $content = simplexml_load_file($content);
    foreach ($content->headline as $c){
        $u0 = $c->uc0;
        $u1 = $c->uc1;
        $u2 = $c->uc2;
        $u3 = $c->uc3;
        $u4 = $c->uf1;
        $u5 = $c->uf2;
        $u6 = $c->uf3;
    }
    foreach($content->content as $c) {
        $c0 = $c->cla1;
        $c1 = $c->cla2;
        $c2 = $c->cma1;
        $c3 = $c->cma2;
        $c4 = $c->cma3;
        $c5 = $c->cra1;
        $c6 = $c->cra2;
    }
    foreach($content->footer as $c){
        $f1 = $c->cf1;
        $f2 = $c->cf2;
        $f3 = $c->cf3;
    }
}
