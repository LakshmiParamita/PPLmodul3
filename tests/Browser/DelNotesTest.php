<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DelNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group DelNotes
     */
    public function testDelNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //mengunjungi halaman dengan router /
                    ->assertSee('Modul 3') //teks yang berada di halaman tersebut
                    ->ClickLink('Log in') //menekan log in
                    ->assertPathIs('/login') //path yang dijalankan; menampilkan login
                    ->type('email', 'lakshmiiii@gmail.com') //menuliskan email
                    ->type('password', '12345678') //menuliskan password
                    ->press('LOG IN') //menekan button Log in
                    ->assertPathIs('/dashboard') //menampilkan dashboard
                    ->assertsee('Dashboard') //menampilkan dashboard
                    ->clickLink('Notes') //mengklik 'Notes'
                    ->press('Delete'); //mengklik 'Delete'
        });
    }
}
