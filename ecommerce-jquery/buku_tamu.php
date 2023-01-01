<style>
    input[text-type],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[text-submit] {
        width: 100%;
        background-color: dodgerblue;
        color: darkgray;
        padding: 14px 20px;
        margin: 8px 0;
        display: inline-block;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[text-submit] {
        background-color: dodgerblue;
    }

    div {
        border-radius: 5px;
        padding: 20px;
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
        text-align: left;
    }
</style>
<!-- CSS -->


<div class="content">
    <div class="container">
        <div class="row">
            <div class="column">
                <div class="title">
                    <h2>Leave a Comment</h2>
                </div>
                <form action="simpandata.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="Nama" name="nama" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan Nama Anda...">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="Email" name="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan Email Anda...">
                    </div>
                    <div class="mb-3">
                        <label for="exampleF ormControlInput1" class="form-label">Handphone</label>
                        <input type="No-HP" name="no_hp" class="form-control" id="exampleFormControlInput1"
                            placeholder="Masukkan Nomor Anda...">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <input type="submit" name="simpan" value="POST COMMENT">
                    <input type="reset" name="batal" value="CANCEL">
                    <input type="button" name="kembali" value="BACK" onclick="self.history.back()">
                </form>

            </div>
        </div>
    </div>
</div>