# Musora UI

Musora UI is a tool for prototyping, building, and testing the front end (HTML/JS/Blade) for projects.


## Publishing NPM Version
- First you need to build all the nessecary files, build command docs WIP

- ```npm adduser``` - follow on screen instructions using the 'musora_dev' npmjs 1pass entry
- ```git config --global user.name "your-username"``` - configure local git
- ```git config --global user.email "your-email"``` - configure local git
- ```npm version patch``` - increase the npm version by 1
- ```npm publish``` - publish new version to npmjs

## Symlinking With Other Repositories
- ```cd /app/musora-ui``` - navigate to this packages root
- ```npm link``` - add musora-ui to npms global list of packages that can be symlinked locally
- ```cd /app/drumeo/laravel``` - navigate to the repo you want to symlink musora-ui to (may need to change path)
- ```npm link musora-ui``` - create the symlink

## Build Commands
WIP

## Setup

1. Ensure your railenvironment repository and docker build are up to date.
1. In manager container, run: **r setup musora-ui**
1. Navigate to: **/app/musora-ui**
1. Run: **npm install**
1. Run: **npm run BUILD_COMMAND**  
1. Run: **r musora-ui composer install**  

You can view the different npm build commands inside the root package.json file. An example is: 
**npm run build-drumeo-dev**

The /public folder of this repository is hosted on your local machine under URL:  
[http://devui.musora.com/](http://devui.musora.com/)  


## Blade

You can automatically render any blade file using the url. /blade tells the request to render a blade template at the 
path after /blade relative to the blade folder in the project. For example:  

http://devui.musora.com/blade/ui  

Will render the blade file at: blade/ui.blade.php  

http://devui.musora.com/blade/core/text-input

Will render the blade file at: blade/core/text-input.blade.php  


## Prototyping 

Musora UI is for prototyping in pure HTML and css, which can be reviewed and go through QA before 
being put in a regular project such as a laravel project.  

All pages inside Musora UI should be statically linked using relative linking in the href tags.    

Please create a new branch in this repository when starting a new prototype or starting a new version of an existing 
one. Please also separate the prototypes by brands using the folder structure.

Feel free to add new build commands and custom tailwind configs. We can also integrate VueJS, but it has not been setup 
yet.

    
## Tools

We highly recommend using the Sizzy browser to develop and preview html pages (license in 1pass):  
[https://sizzy.co/](https://sizzy.co/)   

You can also use our own internal preview tool here:  
[http://devui.musora.com/viewer.html](http://devui.musora.com/viewer.html)  

Tailwind CSS is the front end framework that Musora UI uses, it is already installed and configured. You can find 
the tailwind docs here:  
[https://tailwindcss.com/docs/installation](https://tailwindcss.com/docs/installation)

If you are new to tailwind css we highly recommend watching this video series (the other ones in there are great too):  
[https://tailwindcss.com/course/setting-up-tailwind-and-postcss](https://tailwindcss.com/course/setting-up-tailwind-and-postcss)  

This is an amazing list of front end development resources:  
[https://tailwindcss.com/resources/](https://tailwindcss.com/resources/)

A good list of tailwind css specific plugins and tools:  
[https://github.com/aniftyco/awesome-tailwindcss](https://github.com/aniftyco/awesome-tailwindcss)

We may end up purchasing this UI kit for tailwind:  
[https://tailwindui.com/](https://tailwindui.com/)  
If you think it could be of use let Caleb know!