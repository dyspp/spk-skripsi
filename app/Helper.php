<?php

function setActive($path)
{
   if (request()->segment(1) == 'admin')
   {
      if (request()->segment(2) == $path)
      {
         return 'active active-right';
      }
   }
   elseif (request()->is($path))
   {
      return 'active';
   }
}

function showDropdown($path)
{
   if (request()->segment(1) == 'admin')
   {
      if (request()->segment(2) == $path)
      {
         return ('dropdown show');
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

