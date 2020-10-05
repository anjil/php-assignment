Required config

1. PHP >= 7.1.3
2. BCMath PHP Extension
3. Ctype PHP Extension
4. JSON PHP Extension
5. Mbstring PHP Extension
6. OpenSSL PHP Extension
7. PDO PHP Extension
8. Tokenizer PHP Extension
9. XML PHP Extension


Database Setup
1. Change the db config in .env file
2. Create a db in mysql

Creating and populating the tables
1. Run the following command at root dir
    php artisan migrate:refresh --seed
    
End Points
1. Get all plans
    HTTP METHOD = GET
    End Point = /api/plans
    
2. Get specific plan
    HTTP METHOD = GET
    End Point = /api/plans/<ID>
    
3. Calculate subscription cost
    HTTP METHOD = POST
    End Point = /api/plans/subscription
    Body
    
        Type - JSON
        
        Params - 
        
        [
            {
                "code": "<PLAN_CODE>",
                "frequency": 3
            },
            
            {
                "code": "<PLAN_CODE>",
                "frequency": 12
            }
        ]
        
4. Save user plan
    HTTP METHOD = POST
    End Point = user/<USER_ID>/subscription/save
    Body
    
        Type - JSON
        
        Params - 
        
        [
            {
                "code": "<PLAN_CODE>",
                "frequency": 3
            },
            
            {
                "code": "<PLAN_CODE>",
                "frequency": 12
            }
        ]
    
