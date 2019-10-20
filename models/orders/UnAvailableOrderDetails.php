<?php
/**
 * Created by IntelliJ IDEA.
 * User: Malesela
 * Date: 2019/01/09
 * Time: 12:43 PM
 */


class UnAvailableOrderDetails extends OrderDetails
{
   public function __construct ($book, $quantity, $openion = NULL, $reviewDegree = NULL)
   {
       parent::__construct($book, $quantity, $openion, $reviewDegree);
   }


}