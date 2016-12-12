
<p style="text-align: left;font-size:16px;">Hi {{ $first_name }},</p>

<p style="text-align: left;font-size:16px;">Recently you requested password reset link for your machill.com account. If you did not request password reset, then please ignore this email.</p>

<p style="text-align: left;font-size:16px;">Please click on following link <a target="_blank" href="{{ route('auth.reset', ['token' => $token]) }}">Reset Password</a>.</p>


<p style="text-align: left;font-size:15px;">machill.com</p>

------------------------------------------------------------------------------------

<p style="text-align: left;font-size:16px;">สวัสดี {{ $first_name }},</p>
<p style="text-align: left;font-size:16px;">
เมื่อเร็ว ๆ นี้คุณขอลิงก์การรีเซ็ตรหัสผ่านสำหรับบัญชี machill.com  
ถ้าคุณไม่ได้ขอรีเซ็ตรหัสผ่าน โปรดลบเอีเมลนี้ทิ้ง
</p>

<p style="text-align: left;font-size:16px;">
กรุณาคลิกที่ลิงค์ต่อไปนี้ <a target="_blank" href="{{ route('auth.reset', ['token' => $token]) }}">Reset Password</a>.</p>




<p style="text-align: left;font-size:15px;">machill.com</p>
