<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Register
     */
    public function testRegister(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //mengunjungi halaman dengan router /
                    ->assertSee('Modul 3') //teks yang berada di halaman tersebut
                    ->ClickLink('Register') // menekan register
                    ->assertPathIs('/register') //path yang dijalankan; menampilkan register
                    ->type('name', 'Lakshmi Paramita') //menuliskan nama 
                    ->type('email', 'lakshmiiii@gmail.com') // menuliskan email
                    ->type('password', '12345678') //menuliskan password
                    ->type('password_confirmation', '12345678') //menuliskan confirm password
                    ->press('REGISTER') //menekan button register
                    ->assertPathIs('/dashboard'); //menampilkan dashboard
        });
    }
}
