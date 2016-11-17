# courtauld-aah-child-theme

A WordPress Child Theme developed by Jacob Charles Wilson (@jclwilson) for the Animating Art History website, which extends the 'courtauld-blog-theme'.

The main purpose of this theme is to add the 'Post Inspiration' page, which allows attachments to be displayed on pages when linked to the specific ACF relationship.

This theme approximates the bespoke theme developed by Eva Bensasson and AD (formerly Alienation Dev) for [courtauld.ac.uk](http://courtauld.ac.uk).

## Building

Ensure you have both **npm** installed to build this project.

1. Clone the project
  - ``git clone http://github.com/courtauld/courtauld-blog-theme.git``
2. In a terminal in the **courtauld-blog-theme** folder run,
  2. ``npm install``
3. To build a distribution-ready **courtauld-blog-theme.zip** file run,
  - ``npm run build``
4. The **courtauld-blog-theme.zip** file is now in **dist/** folder.

## Principles

* This theme should be extended and modified with WordPress plugins.
* This theme uses [BEM CSS](http://getbem.com/introduction/).
* The site should adhere to [A11y](http://a11y.me/) guidelines. This is tested with [Pa11y](http://pa11y.org/).

## Contributing

This project uses a dev-branch workflow.

To add or edit a feature, checkout the dev branch and work there, when finished, submit a pull request, and the feature will be merged into the master branch.

This ensures that the master branch is always stable.

## Contributors
* Jacob Charles Wilson (@jclwilson)