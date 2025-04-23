<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group EditNotes
     */
    public function testEditNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') //mengunjungi halaman dengan router /
                    ->assertSee('Modul 3') //teks yang berada di halaman tersebut
                    ->ClickLink('Log in') //menekan log in
                    ->assertPathIs('/login') //path yang dijalankan; menampilkan login
                    ->type('email', 'lakshmiiii@gmail.com') //menuliskan email
                    ->type('password', '12345678') //menuliskan password
                    ->press('LOG IN') //menekan button Log in
                    ->assertsee('Dashboard') //menampilkan dashboard

                    ->clickLink('Notes') //mengklik 'Notes'
                    ->clickLink('Edit') //mengklik 'Edit'
                    ->type('title', 'praktikum ppl modul 3') //mengisi input 'title'
                    ->type('description', 'edit praktikum ppl modul 3 unit testing') //mengisi input 'description'
                    ->press('UPDATE') //menekan tombol 'UPDATE'
                    ->assertsee('Lakshmi'); //teks yang berada di halaman tersebut
        });
    }
}
