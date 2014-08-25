# Statamic Get Touch Device OS plugin
A plugin for Statamic that returns the user's touch device type. At FreshBooks, we use this for displaying the most relevant messaging for the user (i.e. "Download on the App Store" vs "Signup for the Web App").

Only your imagination is the limit! 

:rainbow:

## Installing
- Copy the `accessibility` folder into your `/_add-ons/`
- Enjoy

## Usage

Now, in any template:

```
{{ if accessibility:touchDeviceOS == "iOS"}}
	I'm an iOS device (／_^)／
{{ elseif accessibility:touchDeviceOS == "Android" }}
	I'm an Android device ●　＼(^_＼)
{{ else }}
	I'm just a normal computer
{{ endif }}
```
