<html>
    <head>
        <title>Form Employee</title>
    </head>

    <body>
        <form action="employeeoutput.php" method="post">
            <h1>Form Employee</h1>
            <p>
                Nama Pegawai    : <br>
                <input type="text" name="namalengkap" witdth="75" placeholder="Isi dengan nama lengkap anda">
            </p>

            <p>
                Title   : <br>
                <label>
                <input type="radio" id="desainer" value="Desainer" name="Title"
                >Desainer</label>
                <label>
                <input type="radio" id="sqa" value="SQA" name="Title"
                >SQA</label>
                <label>
                <input type="radio" id="programmer" value="Programmer" name="Title"
                >Programmer</label>
            </p>

            <p>
                <input type="submit" value="Kirim" name="submit">
            </p>

    </body>
</html>
