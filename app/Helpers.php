<?php

function setActive($segment)
{
   if (request()->segment(1) == 'admin')
   {
      if (request()->segment(2) == $segment)
      {
         return 'active active-right';
      }
   }
   elseif (request()->is($segment))
   {
      return 'active';
   }
}

function dropdownActive($segment)
{
   if (request()->segment(1) == 'admin')
   {
      $segments = ['criteria', 'criterionscores', 'alternatives', 'alternativescores'];

      if (in_array($segment, $segments))
      {
         return 'dropdown-active';
      }
      else
      {
         return '';
      }
   }
}

function showDropdown($segment)
{
   if (request()->segment(1) == 'admin')
   {
      $segments = ['criteria', 'criterionscores', 'alternatives', 'alternativescores'];

      if (in_array($segment, $segments))
      {
         return 'dropdown show';
      }
      else
      {
         return '';
      }
   }
}

function ariaExpandedValue($segment)
{
   if (request()->segment(1) == 'admin')
   {
      $segments = ['criteria', 'criterionscores', 'alternatives', 'alternativescores'];

      if (in_array($segment, $segments))
      {
         return 'true';
      }
      else
      {
         return 'false';
      }
   }
}

function getOldValue($value)
{
   if($value != null)
   {
      return  '"'.$value.'"';
   }
   else
   {
      return 'empty';
   }
}

function setAttribute($attribute)
{
   if ($attribute == 0)
   {
      return 'Cost';
   }
   elseif ($attribute == 1)
   {
      return 'Benefit';
   }
   else
   {
      return 'Unknown';
   }
}

function formatPrice($price)
{
   $formattedPrice = number_format($price, 2, ',', '.');

   return $formattedPrice;
}

