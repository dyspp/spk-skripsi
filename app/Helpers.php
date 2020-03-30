<?php

// Master Page Helpers
// A function to add 'active' class for the 'li' elements that contains the anchor tag (<a>).
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

// A function to show or open the dropdown with 'dropdown show' classes.
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

// A function to add 'dropdown-active' class for the dropdown.
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

// A function to change the 'aria-expanded' attribute value.
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

// Form Helpers
// A function to get the old values from form submission.
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

// A function to add 'selected' attribute to input:select option that matches with data from the database.
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

// Criteria Helpers
// A funtion to set (transform) the attribute of a criteon on the criteria index page.
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

// Alternatives Helpers
// A function to give Indonesian Rupiah (IDR / Rp.) currency format.
function formatPrice($price)
{
   $formattedPrice = number_format($price, 2, ',', '.');

   return $formattedPrice;
}

