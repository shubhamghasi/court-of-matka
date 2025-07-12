<div class="greeting">Verification Code</div>
<p style="margin-bottom:12px">
    Hello {{ $user->name }},<br><br>
    Use the following code to verify your account:
</p>
      
      <div class="message">
        To complete your secure access to Court of Matka, please use the verification code below.
      </div>
      
      <div class="otp-container">
        <div class="otp-box">
          <div class="otp-title">Your One-Time Password</div>
          <div class="otp-code">{{ $user->verification_code }}</div>
          <div class="otp-expiry">Valid for 10 minutes only</div>
        </div>
      </div>
      
      <div class="divider"></div>
      
      <div class="message">
        Thank you for choosing <span class="gold-accent">Court of Matka</span>. We're committed to providing you with a secure and enjoyable experience.
      </div>