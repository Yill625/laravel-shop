<?php

return [
    'alipay' => [
        'app_id'         => '2016092100562656',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA5mTSdpKA6hRo87LnpbcuF/+WeirpZF0fLJJauTMneN/sGoQQbfuqsHez+cV9nuxDYQ6oAEXRu0YSzaOq0V7Unt7Mp04+IbeuAcQUH36urvWyfg0WiEM+zPqKG48jQmeuzG2Ey2ZiOpHYMHLqDAovXovQMM/5jdGVG8b3VfrqwcwWeAZdP9kTlKrwl55tXMmwHACSw8Hi/XfRL9Fm4Yg1ODV56wyB3B0uUQxlUREUet6qfChfRgmMSbQG+5rDB4jB3KXlF1KjbajRpwxavtzB4L4/CpTRb6kVN5s39nEkxl5Og6LxFoxrXpvNxKj6leBfyOD35C1lvWF74P3BQDsc3wIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA0RT4FnFeU9Hx/ZBuzHwwWGERO1+7Xb4rIR6xp8qA28wZuJi00UpHhPiZ5oJmYwZewlfbJkpX0c/doizG8yevXg9dE9/sq2J0987adwu43Vk9xhVjmCvpLh1HRZ4j5xEzBCS8oZsGoaOg3pPT/gqe1nM+5sLVyJcV9f8n5/pxthpPjP/77jcHCKtiyyKcQy046FXrjZ72296EKl96U2/I2NXeK6TzNka9wU0+9k56x7yWys8GhsO/UPzJ9Ra2SWZQq59zf1Y9fjOoRLczNG95xbibolDHfrIsMKnjrOhWFY/mtVYr2nulSNSDSU2399uMzl6U0U5UGeDQCexdLHNG8QIDAQABAoIBAEA65d/XIfg0Bdg0l6Uf/aYY47dOuHua4RsCl+cI8b8UG063Ms0cuY3i5TyIELYZDeE8JinEKuhcqCSbBt9J8Li/lYN2hfk8fNxn4nsx0a/GK5D/nyHvU2oEOpHre/IPOZHrSzuGKWpcnx3hYf2n+5W7v7YaYpyFtYxlvzenm2kqa3LO7J3smuvikM9OBLXq7B9dHPZ7GsrVQ+oDbupAGUA5ODLe+KSF/MvSWV8apLyDtfBhBdgaU1fCSoNRbfl08bvBbJJQl4R2roSnz7KfJsumlfDNoMsXJcxPYDVs6T5LuyQgkSRHn4JK8reh1P06yDWuAwe+gtcneDwqNZyFWbUCgYEA+i8jdNLhbDRwYvS+gZUxsrjIlJZENw9blJsaWWWnd6pGI8CU9Yq9qANe9U6CLpBFfVchHlpbOti3pY/2GOvcfrAWr+0OmJqfF2b0FhIP2NUcDtq9BbB7NCER6hRopI68tDD1EeQWWqJlNcn5wmDsFN71L/aYZ9X/wUbFyTiaWTcCgYEA1fE6ilNhmPDfRifPaN4guqIgwiZc1ME06sMriInNALOl4safy8f1jmn0yGjyBsaPI3hytrV0Aa19JnW8CCavWpNeCTEX+d2WvY6HLnJ7lanvKtce9Uf9w31M3vja2sxg+A2lbkfQzaiNbOwtib/Hw+q0RCP+3S0aEZo9TaO6VRcCgYEAn2qqDSbSvUAs3OFXAvsuT9Ou+/9EOFFw6aBrictcisPVLbLpOAzQDN8ZAvajvUfw/40lbVHmD/lIDBdPmVGxjohl7HQBePwNo7vWjLm1n1UsK8r150otN2pbH+0hQLozRB5uCphsJhSUqVGp9FIOHL51PbrEImYaMe4G2dFXiMECgYAKMDe6eKgQMYBgherRsqpaWPg4Zr1LAHx1pZ/AG9fgba27s/vOJ5KhGpimpqDIA9KzPLwxyUhiABISr86pkLYPGS+EPotGwe+4zT3Qz3DlOreCEcaOpcQG+EOd5rn9a3g+t9+l9dOSx7Ece87bXX+068tz50bu34P7TJ4YwXBRNwKBgEzau/k0i6hIchlbOdmT5MJQhDXYGNQJAUEEkDNv0m6s7O+EPu9KBwBIBBLK3St0Ex3h5RGo56wbgzcZC47m0JDnoWxKiLb63IB2kwU/wYt9l09Q8HRIFhvgjw/D4hBZZa5YxT/Sio62kc5NrTZmX0uF0E92ogqtqkb6pBwNYItD',
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