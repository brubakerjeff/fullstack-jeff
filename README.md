# Mission: full stack 
We have a need to gather a number of documents from users in succession. Users should be guided through the process of uploading each document, which can be dragged and dropped into the window. When they upload each document, the interface should guide them to upload the next one. When they've uploaded all the required documents, the interface should let the user know they've completed the process. Implement an API and front-end that enable CRUD functionality for any number of documents within a "set" associated with the user, and storage of the associated files.  

Requirements 
- The API will use the latest current version of the Laravel framework 
- The user interface should be implemented according to current standards, whether that be Blade with Alpine/TailwindCSS, or a packaged solution like [Livewire](https://laravel-livewire.com/) 
- While an interface for the retrieval of the uploaded documents is out of scope, store them in such a way that all the documents from the set can be easily read and retrieved 
- Documents have names and creation dates 
- Document sets have metadata to include name, creation date, and the metadata of their component documents to include descriptions. 
- The persistance layer does not need to be implemented 
Authorization and authentication is out of scope and can be ignored 
The code should be stored in a git repository 


To start docker

`./vendor/bin/sail up` 