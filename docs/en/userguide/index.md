title: Content review
summary: Mark pages in the CMS with a date and an owner for future reviews.

## Content review

## Setting up
Global settings can be configured via the global settings admin in the CMS under the "Content Review" tab.
This includes global groups, users, as well as a template editor that supports a limited number of variables.

![settings](_images/content-review-siteconfig-settings.png)

## Schedules
To set up content review schedules you need to log in as a user with the 'Set content owners and review dates' permission. This can either
be an administrator who has all permissions, or by giving a group the specific permission.

![](_images/content-review-permission.png)

To set a content review schedule for a page go to `Settings > Content Review`.

![](_images/content-review-settings.png)

CMS users without the permission to change the content review schedule can still see the settings
and previous reviews in the same view, but cannot change anything.

![](_images/content-review-settings-ro.png)

## If your database contains a large number of members

The page owners selector will change from a ListboxField to a Gridfield in order 
to prevent your browser from crashing. By default this numbers is 500. You can
customise this threshold by editing your .yml with the following settings:

```
SiteTree:
  content_review_gridfield_threshold: 500
```