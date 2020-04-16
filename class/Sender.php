<?php
/* Copyright (C) 2020 Andor Molnár <andor@apache.org> */

/**
 * \file        class/natstatus.class.php
 * \ingroup     natsend
 * \brief       This file is a CRUD class file for NatStatus (Create/Read/Update/Delete)
 */

namespace natsend;

use Facture;
use NatStatus;
use User;

require_once __DIR__ . '/../vendor/autoload.php';

class Sender
{
    private $db;
    private $facture;

    public function __construct(Facture $f)
    {
        $this->facture = $f;
        $this->db = $f->db;
    }

    public function send(User $user)
    {
        $natstatus = new NatStatus($this->db);
        $result = $natstatus->fetch(-1, $this->facture->ref);
        if ($result < 0)
        {
            dol_print_error($this->db, $natstatus->error); }
        else
        {
            print "Object with id=".$id." loaded\n";
        }
    }
}
