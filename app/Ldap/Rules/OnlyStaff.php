<?php

namespace App\Ldap\Rules;

use LdapRecord\Laravel\Auth\Rule;
use LdapRecord\Models\ActiveDirectory\Group;

class OnlyStaff extends Rule
{
    /**
     * Check if the rule passes validation.
     *
     * @return bool
     */
    public function isValid()
    {
       // dd($this->user->groups());
        //return true;
        //
        /*
         return $this->user->groups()->exists(
        'CN=All Staff,OU=Security Groups,DC=nkcschools,DC=org'
             
             
    );*/
        
              $allstaff = Group::find('CN=All Staff,OU=Security Groups,DC=nkcschools,DC=org');

        return $this->user->groups()->recursive()->exists($allstaff);

        
    }
}
