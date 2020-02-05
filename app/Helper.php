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

function showDropdown($segment)
{
   if (request()->segment(1) == 'admin')
   {
      $segments = ['criteria', 'criterionscores'];

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
      $segments = ['criteria', 'criterionscores'];

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

