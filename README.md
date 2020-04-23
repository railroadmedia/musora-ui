# Musora UI

Musora UI is a tool for prototyping, building, and testing the front end (HTML/JS) for projects.

## Setup

1. Ensure your railenvironment repository and docker build is up to date.
1. In manager container, run: r setup musora-ui
1. Navigate to: /app/musora-ui
1. Run: npm install
1. Run: npm run build  

The /public folder of this repository is hosted on your local machine under URL:
[http://devui.musora.com/](http://devui.musora.com/)  

You can view the different npm build commands inside the root package.json file.

## Prototyping 

We highly recommend using the Sizzy browser to develop and preview html pages:  
[https://sizzy.co/](https://sizzy.co/) 

You can also use our own internal preview tool here:  
[http://devui.musora.com/viewer.html](http://devui.musora.com/viewer.html)

Musora UI is meant for prototyping in pure HTML and css, which can then be reviewing and go through QA before 
being put in a regular project such as a laravel project.  

All pages inside Musora UI should be statically linked using relative linking in the href tags.    

Please create a new branch in this repository when starting a new prototype or starting a new version of an existing 
one.