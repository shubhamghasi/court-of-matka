<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Court of Matka - OTP Verification</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* Reset styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #f5f7ff;
    }
    
    /* Container styles */
    .email-container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #ffffff;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(76, 29, 149, 0.18);
    }
    
    /* Header styles */
    .header {
      background: linear-gradient(135deg, #4c1d95, #6d28d9);
      padding: 30px;
      text-align: center;
      color: white;
      position: relative;
    }
    
    .logo-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .logo-text {
      font-size: 28px;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: uppercase;
    }
    
    .logo-accent {
      color: #f0c420;
      font-weight: 800;
    }
    
    .header-pattern {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 8px;
      background: repeating-linear-gradient(
        45deg,
        rgba(240, 196, 32, 0.5),
        rgba(240, 196, 32, 0.5) 10px,
        rgba(255, 255, 255, 0.3) 10px,
        rgba(255, 255, 255, 0.3) 20px
      );
    }
    
    /* Content styles */
    .content {
      padding: 35px 30px;
      text-align: center;
    }
    
    .greeting {
      font-size: 22px;
      color: #4c1d95;
      margin-bottom: 15px;
      font-weight: 600;
    }
    
    .message {
      margin-bottom: 25px;
      color: #4b5563;
      font-size: 15px;
      line-height: 1.7;
      font-weight: 400;
    }
    
    /* OTP box */
    .otp-container {
      margin: 35px 0;
    }
    
    .otp-box {
      background: linear-gradient(to bottom right, #f5f3ff, #ede9fe);
      border: 1px solid #ddd6fe;
      border-radius: 12px;
      padding: 25px 20px;
      max-width: 320px;
      margin: 0 auto;
      box-shadow: 0 4px 12px rgba(76, 29, 149, 0.12);
      position: relative;
      overflow: hidden;
    }
    
    .otp-box::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 6px;
      height: 100%;
      background: linear-gradient(to bottom, #6d28d9, #4c1d95);
    }
    
    .otp-title {
      color: #4c1d95;
      font-weight: 600;
      margin-top: 0;
      margin-bottom: 18px;
      font-size: 16px;
    }
    
    .otp-code {
      font-family: 'Poppins', sans-serif;
      font-size: 36px;
      font-weight: 700;
      letter-spacing: 6px;
      color: #4c1d95;
      padding: 12px 15px;
      background-color: white;
      border-radius: 8px;
      border: 1px solid #ddd6fe;
      display: inline-block;
      box-shadow: 0 2px 8px rgba(76, 29, 149, 0.08);
    }
    
    .otp-expiry {
      margin-top: 18px;
      font-size: 13px;
      color: #6b7280;
      font-style: italic;
      font-weight: 500;
    }
    
    /* Divider */
    .divider {
      height: 1px;
      background: linear-gradient(to right, transparent, #e0e7ff, transparent);
      margin: 30px 0;
    }
    
    /* Security note */
    .security-note {
      background-color: #f5f3ff;
      border-left: 4px solid #6d28d9;
      padding: 18px;
      margin: 25px 0;
      border-radius: 0 8px 8px 0;
      text-align: left;
      font-size: 14px;
      color: #4b5563;
    }
    
    .security-title {
      color: #6d28d9;
      font-weight: 600;
      margin-top: 0;
      margin-bottom: 10px;
      font-size: 15px;
      display: flex;
      align-items: center;
    }
    
    .security-icon {
      display: inline-block;
      width: 20px;
      height: 20px;
      background-color: #6d28d9;
      border-radius: 50%;
      color: white;
      text-align: center;
      line-height: 20px;
      font-size: 12px;
      margin-right: 8px;
      font-weight: bold;
    }
    
    /* Footer styles */
    .footer {
      background-color: #f5f3ff;
      padding: 25px 30px;
      text-align: center;
      font-size: 13px;
      color: #6b7280;
      border-top: 1px solid #e0e7ff;
    }
    
    .footer-links {
      margin-top: 15px;
    }
    
    .footer-links a {
      color: #6d28d9;
      text-decoration: none;
      margin: 0 8px;
      font-weight: 500;
      transition: color 0.2s;
    }
    
    .footer-links a:hover {
      color: #4c1d95;
    }
    
    .company-info {
      margin-top: 18px;
      font-style: normal;
      color: #6b7280;
    }
    
    .gold-accent {
      color: #f0c420;
      font-weight: 600;
    }
    
    /* Responsive styles */
    @media screen and (max-width: 600px) {
      .email-container {
        width: 100%;
        margin: 0;
        border-radius: 0;
      }
      
      .header, .content, .footer {
        padding: 20px;
      }
      
      .otp-code {
        font-size: 30px;
        letter-spacing: 4px;
      }
    }
  </style>
</head>
<body>
  <div class="email-container">
    <div class="header">
      <div class="logo-container">
        <div class="logo-text">Court of <span class="logo-accent">Matka</span></div>
      </div>
      <div class="header-pattern"></div>
    </div>
    
    <div class="content">
      @yield('content')
    </div>
    
    <div class="footer">
      <div class="footer-links">
        <a href="#">Help Center</a> | 
        <a href="#">Privacy Policy</a> | 
        <a href="#">Terms of Service</a>
      </div>
      
      <div class="company-info">
        <p>© 2023 Court of <span class="gold-accent">Matka</span>. All rights reserved.</p>
        <p>This is an automated message. Please do not reply to this email.</p>
      </div>
    </div>
  </div>
</html>
