<!DOCTYPE html>
<html>
<head>
    <title>AllPHPTricks.com</title>
</head>
<body>
    <h1>{{ $testMailData['title'] }}</h1>
    
    <div>
            <div style="font-family:Helvetica,Arial,sans-serif;min-width:800px;overflow:auto;line-height:2">
                <div style="margin:50px auto;width:70%;padding:20px 0">
                    <span class="im">
                        <p style="font-size:1.1em">Dear {{ $testMailData['name'] }},</p>
                        <p>{{ $testMailData['body'] }}</p>
                   <p style="font-size:0.9em">Regards,</p> 
                    <hr style="border:none;border-top:1px solid #eee">
                </div>
            </div>
        
    </div>
</body>
</html>

