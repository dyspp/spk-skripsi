<?php

// Master Page Helpers
// A function to add 'active' class for the 'li' elements that contains the anchor tag (<a>).
if (!function_exists('setActive'))
{
   function setActive($segment)
   {
      if (request()->segment(1) == 'admin')
      {
         if (request()->segment(2) == $segment)
         {
            return 'active';
         }
      }
      elseif (request()->is($segment))
      {
         return 'active';
      }
   }
}

// A function to show or open the dropdown with 'dropdown show' classes.
if (!function_exists('showDropdown'))
{
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
}

// A function to add 'dropdown-active' class for the dropdown.
if (!function_exists('dropdownActive'))
{
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
}

// A function to change the 'aria-expanded' attribute value.
if (!function_exists('ariaExpandedValue'))
{
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
}

// Form Helpers
// A function to get the old values from form submission.
if (!function_exists('getOldValue'))
{
   function getOldValue($value)
   {
      $text = "Your input was";
   
      if($value != null)
      {
         return  "$text \"$value\".";
      }
      else
      {
         return "$text empty.";
      }
   }
}

// A function to add 'selected' attribute to input:select option that matches with data from the database.
if (!function_exists('setSelected'))
{
   function setSelected($dataValue, $optionValue)
   {
      if ($dataValue == $optionValue)
      {
         return 'selected';
      }
      else
      {
         return '';
      }
   }
}

// Criteria Helpers
// A funtion to set (transform) the attribute of a criteon on the criteria index page.
if (!function_exists('setAttribute'))
{
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
}

// Alternatives Helpers
// A function to give Indonesian Rupiah (IDR / Rp.) currency format.
if (!function_exists('formatPrice'))
{
   function formatPrice($price)
   {
      $formattedPrice = number_format($price, 2, ',', '.');
   
      return 'Rp. '.$formattedPrice;
   }
}

// Public Frontend Helpers
// A function to split a string, then transform it into a list of information.
if (!function_exists('stringToList'))
{
   function stringToList($string)
   {
      $list = explode(' / ', $string);

      return $list;
   }
}