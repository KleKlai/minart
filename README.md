# Mindanao Art

Passport Authorization not **required**

After cloning go to the project directory and open up terminal and execute the code
```bash
bash install.sh
```
**Note:** if you are `Windows` user make sure to use bash terminal to run `install.sh`

## Functions

 - [x] Create Artist
 - [x] List All Artist
 - [x] Get Specific Artist
 - [x] Delete Artist

## API Endpoints

**Create Artist**
Method: POST
URL: http://127.0.0.1:8000/api/v1/artist
Field
|KEY|TYPES|
|--|--|
|name		| String		|
|email		| email, unique	|	
|gender 	| Male ? Female |
|birthday 	| date 			|
|profession	| String		|

**List All Artist**
Method: GET
URL: http://127.0.0.1:8000/api/v1/artist

**Get Specific Artist**
Method: GET
URL: http://127.0.0.1:8000/api/v1/artist/`id`

**Delete Artist**
Method: DELETE
URL: http://127.0.0.1:8000/api/v1/artist/`id`


