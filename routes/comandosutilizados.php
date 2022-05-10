<?php

Route::get('/test', function () {
    


    /*
    return Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Administrator',
        'full-access' => 'yes',
    ]);

    return Role::create([
        'name' => 'Guest',
        'slug' => 'guest',
        'description' => 'guest',
        'full-access' => 'no',
    ]);

    return Role::create([
        'name' => 'test',
        'slug' => 'test',
        'description' => 'test',
        'full-access' => 'no',
    ]);

    */ 

    //$user = User::find(1);

    //$user->roles()->attach([1,2,3]);
    //$user->roles()->detach([3]);

    //$user->roles()->sync([1,2]);

    //return $user->roles;

    /* return Permission::create([
        'name' => 'List product',
        'slug' => 'product.index',
        'description' => 'A user can list permission',
    ]);*/

    $role = Role::find(2);

    $role->permissions()->sync([1,2]);

    return $role->permissions;

});   