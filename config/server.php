<?php
    const server="localhost";
    const db="PRESTAMOS";
    const user="root";
    const pass="";

    const SGBD="mysql:host=".server.";dbname=".db;

    //para configurar el hash por encriptacion
    const method="AES-256-CBC";
    const secret_key='$prestamos@2020';
    const secret_iv='012345';