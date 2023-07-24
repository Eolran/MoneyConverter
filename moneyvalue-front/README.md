# moneyvalue-front

This is the front-end application for the Converter app, developped in Vue. You will need to follow the instructions here to start the project.

## Recommended IDE Setup

[VSCode](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur)


## Project Setup

```sh
npm install
```

## Start the project

```sh
npm run dev
```

### The Project

you'll need to first setup the back-end of the application if you didn't done it already. If not, you won't have any data to convert, or retrieve. Sono point of running this app.

When entering the project, you'll be directed to the homepage, which only give you the access to convert money from one currency to another.
To access the ADMIN part, you'll first need to initate the application back-end developped in Laravel, then in your URL, you'll need to access http://localhost:5173/admin, and put your user email and user password. Care about the fact that only one user is already registered : Philip, the soleowner of this app. His credentials are "admin@admin.com" and "admin" for login and password. 

Now that you are inside the Admin panel, you can manage currencies and conversions pairs. Don't mess up! YOU CAN ONLY GENERATE CURRENCIES WITH THE BACK-END.
(Technically, the form to add a currency is present, but not stated in the requirements.)

I made more currencies than pairs for the beggining to let you play with the pairs creation form. Have fun !