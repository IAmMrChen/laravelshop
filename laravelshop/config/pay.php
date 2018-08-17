<?php

return [
    'alipay' => [
        'app_id'         => '2016091800541824',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoku4h0TLh7o751iVr0CWhnYYReNjeKJcaVi5v2HBPhcrG7VSKdeQ7WJ2e6Zl+ZRMig6v7eQ5bY3MbR6FYH7haSOFrCtFvkQCAxSwTIvGVi9xVTKcL9YIQasxMq3oGnFxRmHqHXLuUib2nNOqyh5sVQHZ57JOo6LzBrXdKy4lQNQJWPqYl/IRUA1d9b8FVdIUY/daPVvjsS0JNEwX6cjkCaPbvIg/06H43RvLy2TNzX+5UEcq2SOXftWRqPxaPk4U5F9L2IqXJmeNwE/wUSduocFokEMUb3EjgekndOfzhFFzD818DDpZsF6AWAp5WPaY67NMaD13rVT5/wMQmJRsuQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAyfxOr9Bt9eV4w2Ct4wh8ZXuuldwVulIXdMlcvGXAgmB5ntkc3JLF4EL5CdPhNZAq1XL+4u115YPDNU9IrVHRMmNLFDOrKOGDMWp6xjps0L37L/BMIKb34niwcsqUmJAnBRq1k+3UkQbN8teIRgaIhsr9I+eJF1tY0tghtSqWfJHRi2Ek/OkSG2ept70hmtEATt3WIKkygJUvUTDHedOzhFyHNYwaFqW5JfI9AQT0W7nHvYIyvi2/VEf5PpDBMqY+w5gScnskxdPw2wQr1QCfa8gEYZhymZLSqGRngBvTauLCnhPhw+tvBi8wLENrwkaARFxtR3exyR3aACSYj10uowIDAQABAoIBAFdztUHr9WAMvY+iEUeGCg4KUdmyk3m7R0qaUFuFlqccTCwZhqR9q8zgUmEN6qk9RT5rbq4j7/KybNds/2ODVBcD5KLXiBjIIvxHROcErs5mIxZrbRqKEDNu276ntVSkvTA5kzp8M5ejIZIt/WOMOppZ0uYzvihttXR8fYOp78P4vZ9DKQhjphpnxWEqqrQdJtLCyDMiBhDUDawd/u+LENt6v/f1baVVT+vbGpFjP6rQqdn+EOoi0pk++9Yn0hqOy1aLSP973mz+RBvCe7zgzxRRgPa+iC9eADghzFC85ykk/CJXY4ZLdk4p3x7Xf7JE4d6BdQDcuYv2JzpSmJZAKFkCgYEA49xanBKze4rdMz4wsAsqC3E3MFil4YRto3T0C4biX1ytb5pV8QDvWbgVuCzUeDJXLB57VwdAnweh2Zj8eG3vHX521AbEW2LnpVRgGTMCzkaoY2geD4Y1TdTIP1OiEyavrZK6XuAbhIigdfZm9xr9IO3oHX3VhQNud49DR+oFcK0CgYEA4u3t1sCA3Q2fldX/NHdI9OJ46AD1PX1d6uWT+gihslusI1HLtpIErDIwgpZDjE0ufZunPmCrRtvi6c1VWCEn7J1L53NUbenQaoHhhr41GrWfxB9CAk5prN163JLGPZ42AwiOoAr8Ze7mT4cLdvApTECsFxu+0z2N8Cw0wGTh9o8CgYEAoYiJQ7OOQbrD7Zvc8DA58jqkoUV281TqVMKIb9ODj48n9MI4ws2i4Lu7ygEd7sfhPImvbpbZnOPQPW5TLRziMsqAevcBJLgM+AvExJiBGLLGlRIunVrLVw3Nl/c2ItV+HVKzhKbjWyVwe6/edrdPU5TUxHN8dvtjyKZrUAP7L1ECgYBuwHJwefkqaYi2Rv/Lql/37EPX7wfBn9rjVnJ2+Bl6g9UqU7RZgUA4jjIwuYd0BQMomHvyLJnK9mvzcZwya9QhXc96wUW2cwOdx4+7BD/ErlmwDRVZLM3UaS+aUSPhVMLFjjqVj2cJlKPgsmb9AE8XgQS8LnVegU8xpVGFiHbjrwKBgQCbW1wdFoYqlz/n5C7XQheaqyINlbgTFfbnwTpc8yH90iB9hPVcK3gtLS2iXHioNnWXqnjp/v45RdZyDtrVhN3OKDi1As4pM1ycblBju9TCSvA1/7C82wbsyo8VQupSb+/eMGLDYjoR5j0wuRr3D6e4q8ZrLOnR44FZRn09yiExAA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];