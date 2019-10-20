<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2019/01/09
 * Time: 11:50 PM
 */

spl_autoload_register(function ($class){
    $arr=['goods','interfaces','orders','reviews','serve','customer'];
    foreach ($arr as $val) {
        $path=__DIR__."/../$val/$class.php";
        if (file_exists($path))
            require_once $path;
    }
});

class Review
{
    protected $opinion;
    protected $degreeReview;

    /**
     * Review constructor.
     * @param $opinion
     * @param $degreeReview
     */
    protected function __construct ($opinion, $degreeReview)
    {
        $this->opinion = $opinion;
        $this->degreeReview = $degreeReview;
    }


}