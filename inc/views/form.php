<form id="form-main" action="<?php echo $base_url?>/thankyou.php" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="name"  placeholder="Nhập họ tên">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Nhập email">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="phone_number" placeholder="Nhập số điện thoại">
    </div>
    <textarea rows="5" name="message" placeholder="Nhập tin nhắn" class="message-input"></textarea>
    <button type="submit"  name="submit" value="submit" id="submit" class="frm-button btn-lg btn btn-primary" >Gửi</button>
</form>
