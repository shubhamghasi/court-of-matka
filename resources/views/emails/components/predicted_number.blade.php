<div class="greeting">Predicted Number</div>

<p style="margin-bottom:12px">
    Hello {{ $user->name }},<br><br>
    Based on your request, here is your predicted number:
</p>

<div class="message">
    This number has been generated for your game in <strong>Court of Matka</strong>.
</div>

<div class="otp-container">
    <div class="otp-box">
        <div class="otp-title">Your Predicted Number</div>
        <div class="otp-code">{{ $predicted_number }}</div>
        <div class="otp-expiry">Use it wisely — good luck!</div>
    </div>
</div>

<div class="divider"></div>

<div class="message">
    Thank you for playing with <span class="gold-accent">Court of Matka</span>. We wish you the best!
</div>
