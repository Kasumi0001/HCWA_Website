# RULES INVOLVING THIS PROJECT
1) Before making any changes in the GitHub Repository, **ALWAYS 'Fetch Orgin'** to prevent the need to merge overlapping code creating duplicates that aren't needed.
2) Notify when editing the style.css in group chats to everyone, specifically if editing stuff that is used across multple sites (Like Buttons, basic h2-h5 text, etc) to prevent merge overlaps.
3) Give **concise notes prior to pushing changes to GitHub origin** of what you have done and plan to do next to help keep yourself in track and explain to other members in the team what you're working on code wise to prevent double up work. As this can get really easily messy in a hurry with this nitty gritty coding phase.

# Style Sheet Structure Contents Overview
*To make it easy broad strokes to help navigate the 'Stye.css' when coding the HTML pages*.

# SECTION 1 - Classes that is used on multiple pages such as colour palettes, fonts, containers, text, navigation and footer. 
# CODE LINES 1 to 192 (Upadated 15/05/2024)
    Order of Classes by types:
        1. Colour Palette (Also know as root) --- Code Lines 1-8
        2. Font Faces                         --- Code Lines 9-14
        3. Custom Containers                  --- Code Lines 15-27
        4. Background Colours Containers      --- Code Lines 28-70
        5. Images                             --- Code Lines 71-80
        6. Typography                         --- Code Lines 81-130
        7. Buttons                            --- Code Lines 131-192
*Navigation and Footer images and typography aren't in their own category*

# SECTION 2 - Classes that are specific to only one html page that each individual is working on below, I am using mine (aka Index Page) to show as example as listed below:
# CODE LINES 192 to down onwards (Upadated 15/05/2024)
    Order of index classes by types example:
        1. Colours (Using root but has specific pixel height and width for bacgrounds etc.)
        2. Images (Specific to index page)
        3. Typography (Specific to index text layout such as how I'm the only one that is using H1 font and had commented to what font is a specific of a h3 or p type)

# Another example directly copied and pasted from the style sheet - What's on (Meagans)
/* WHAT'S ON - MEAGAN */
**/* Colours */**
.allycauses
{
    background-color:var(--LighterBlack);
    height: 800px;
    margin-top: 10%;
}
**/* Images */**
.allyimg{
    margin-top:0px;
    padding-top: 10%;
    padding-bottom: 20%;
}
.awards{
    padding-bottom: 10%;
    padding-top: 2%;
    color: white;
    margin-right: 0%;
}
**/* Typography */**
.awardstitle{
    padding-top: 5%;
    margin-top: 5%;
    color: white;
}
.awardsub{
    color: white;
    padding-top: 5%;
}
.text{
    padding-bottom: 5%;
}

# TAKE NOTE OF THE ORDER OF THE TYPES OF CLASSES I'VE HIGHLIGHTED WHICH IS:
Colour, Images and Typography.

I would recommend following up when creating yours in this order as this will significantly help with navigating on the style sheet as it will be a very large document.

# CODE LINE OF THE START EVERYONE ELSES HTML PAGE SPECIFIC STYLE CLASSES AT THIS CURRENT TIME (Upadated 15/05/2024):
Index Page by Jess          - Code line 194
About Us Page By ???        - Code line 257
What's On Page By Meagan    - Code line 259
Live Issues Page By Zarah   - Code line 300
Membership Page By Chet     - Code line 302 (This one is a maybe as it can be just done using wp pages)
Contact Us by Thisari       - Code line 304