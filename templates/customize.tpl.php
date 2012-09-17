<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="author" content="Martin Bean" />
    <title>Bootstrap Generator</title>
    <link rel="shortcut icon" href="assets/ico/favicon.ico" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/application.css" />
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body data-spy="scroll" data-target=".navbar">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="./" rel="home">Bootstrap Generator</a>
          <ul class="nav">
            <li class="active"><a href="#components">Components</a></li>
            <li><a href="#plugins">jQuery plugins</a></li>
            <li><a href="#variables">Variables</a></li>
            <li><a href="#download">Download</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <form method="post">
        <fieldset id="components">
          <header class="page-header">
            <h1>Components</h1>
          </header>
          <div class="row">
            <div class="span4">
              <h3>Scaffolding</h3>
              <label class="checkbox">
                <input type="checkbox" value="reset.less" checked="checked" />
                Normalize and reset
              </label>
              <label class="checkbox">
                <input type="checkbox" value="scaffolding.less" checked="checked" />
                Body type and links
              </label>
              <label class="checkbox">
                <input type="checkbox" value="grid.less" checked="checked" />
                Grid system
              </label>
              <label class="checkbox">
                <input type="checkbox" value="layouts.less" checked="checked" />
                Layouts
              </label>
              <h3>Base CSS</h3>
              <label class="checkbox">
                <input type="checkbox" value="type.less" checked="checked" />
                Headings, body etc.
              </label>
              <label class="checkbox">
                <input type="checkbox" value="code.less" checked="checked" />
                Code and pre
              </label>
              <label class="checkbox">
                <input type="checkbox" value="labels-badges.less" checked="checked" />
                Labels and badges
              </label>
              <label class="checkbox">
                <input type="checkbox" value="tables.less" checked="checked" />
                Tables
              </label>
              <label class="checkbox">
                <input type="checkbox" value="forms.less" checked="checked" />
                Forms
              </label>
              <label class="checkbox">
                <input type="checkbox" value="buttons.less" checked="checked" />
                Buttons
              </label>
              <label class="checkbox">
                <input type="checkbox" value="sprites.less" checked="checked" />
                Icons
              </label>
            </div>
            <div class="span4">
              <h3>Components</h3>
              <label class="checkbox">
                <input type="checkbox" value="button-groups.less" checked="checked" />
                Button groups and dropdowns
              </label>
              <label class="checkbox">
                <input type="checkbox" value="navs.less" checked="checked" />
                Navs, tabs and pills
              </label>
              <label class="checkbox">
                <input type="checkbox" value="navbar.less" checked="checked" />
                Navbar
              </label>
              <label class="checkbox">
                <input type="checkbox" value="breadcrumbs.less" checked="checked" />
                Breadcrumbs
              </label>
              <label class="checkbox">
                <input type="checkbox" value="pagination.less" checked="checked" />
                Pagination
              </label>
              <label class="checkbox">
                <input type="checkbox" value="pager.less" checked="checked" />
                Pager
              </label>
              <label class="checkbox">
                <input type="checkbox" value="thumbnails.less" checked="checked" />
                Thumbnails
              </label>
              <label class="checkbox">
                <input type="checkbox" value="alerts.less" checked="checked" />
                Alerts
              </label>
              <label class="checkbox">
                <input type="checkbox" value="progress-bars.less" checked="checked" />
                Progress bars
              </label>
              <label class="checkbox">
                <input type="checkbox" value="hero-unit.less" checked="checked" />
                Hero unit
              </label>
              <h3>JS Components</h3>
              <label class="checkbox">
                <input type="checkbox" value="tooltip.less" checked="checked" />
                Tooltips
              </label>
              <label class="checkbox">
                <input type="checkbox" value="popovers.less" checked="checked" />
                Popovers
              </label>
              <label class="checkbox">
                <input type="checkbox" value="modals.less" checked="checked" />
                Modals
              </label>
              <label class="checkbox">
                <input type="checkbox" value="dropdowns.less" checked="checked" />
                Dropdowns
              </label>
              <label class="checkbox">
                <input type="checkbox" value="accordion.less" checked="checked" />
                Collapse
              </label>
              <label class="checkbox">
                <input type="checkbox" value="carousel.less" checked="checked" />
                Carousel
              </label>
            </div>
            <div class="span4">
              <h3>Miscellaneous</h3>
              <label class="checkbox">
                <input type="checkbox" value="wells.less" checked="checked" />
                Wells
              </label>
              <label class="checkbox">
                <input type="checkbox" value="close.less" checked="checked" />
                Close icon
              </label>
              <label class="checkbox">
                <input type="checkbox" value="utilities.less" checked="checked" />
                Utilities
              </label>
              <label class="checkbox">
                <input type="checkbox" value="component-animations.less" checked="checked" />
                Component animations
              </label>
              <h3>Responsive</h3>
              <label class="checkbox">
                <input type="checkbox" value="responsive-utilities.less" checked="checked" />
                Visible/hidden classes
              </label>
              <label class="checkbox">
                <input type="checkbox" value="responsive-767px-max.less" checked="checked" />
                Narrow tables and below (&lt;767px)
              </label>
              <label class="checkbox">
                <input type="checkbox" value="responsive-768px-979px.less" checked="checked" />
                Tablets to desktop (768px&ndash;979px)
              </label>
              <label class="checkbox">
                <input type="checkbox" value="responsive-1200px-min.less" checked="checked" />
                Large desktops (&gt;1200px)
              </label>
              <label class="checkbox">
                <input type="checkbox" value="responsive-navbar.less" checked="checked" />
                Responsive navbar
              </label>
            </div>
          </div>
        </fieldset>
        <fieldset id="plugins">
          <header class="page-header">
            <h1>Select jQuery plugins</h1>
          </header>
          <div class="row">
            <div class="span4">
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-transition.js" checked="checked" />
                Transitions <small>(required for any animation)</small>
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-modal.js" checked="checked" />
                Modals
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-dropdown.js" checked="checked" />
                Dropdowns
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-scrollspy.js" checked="checked" />
                Scrollspy
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-tab.js" checked="checked" />
                Togglable tabs
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-tooltip.js" checked="checked" />
                Tooltips
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-popover.js" checked="checked" />
                Popovers <small>(requires Tooltips)</small>
              </label>
            </div>
            <div class="span4">
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-affix.js" checked="checked" />
                Affix
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-alert.js" checked="checked" />
                Alert messages
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-button.js" checked="checked" />
                Buttons
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-collapse.js" checked="checked" />
                Collapse
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-carousel.js" checked="checked" />
                Carousel
              </label>
              <label class="checkbox">
                <input type="checkbox" value="bootstrap-typeahead.js" checked="checked" />
                Typeahead
              </label>
            </div>
            <div class="span4">
              <h4 class="muted">Heads up!</h4>
              <p class="muted">All checked plugins will be compiled into a single file, bootstrap.js. All plugins require the latest version of <a href="http://jquery.com/" rel="external">jQuery</a> to be included.</p>
            </div>
          </div>
        </fieldset>
        <fieldset id="variables">
          <header class="page-header">
            <h1>Customize variables</h1>
          </header>
          <div class="row">
            <div class="span4">
              <h3>Scaffolding</h3>
              <div class="control-group">
                <label class="control-label">@bodyBackground</label>
                <div class="controls">
                  <input type="text" placeholder="@white" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@textColor</label>
                <div class="controls">
                  <input type="text" placeholder="@grayDark" />
                </div>
              </div>
              <h3>Links</h3>
              <div class="control-group">
                <label class="control-label">@linkColor</label>
                <div class="controls">
                  <input type="text" placeholder="@08c" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@linkHoverColor</label>
                <div class="controls">
                  <input type="text" placeholder="darken(@linkColor, 15%)" />
                </div>
              </div>
              <h3>Colors</h3>
              <div class="control-group">
                <label class="control-label">@blue</label>
                <div class="controls">
                  <input type="text" placeholder="#049cdb" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@green</label>
                <div class="controls">
                  <input type="text" placeholder="#46a546" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@red</label>
                <div class="controls">
                  <input type="text" placeholder="#9d261d" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@yellow</label>
                <div class="controls">
                  <input type="text" placeholder="#ffc40d" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@orange</label>
                <div class="controls">
                  <input type="text" placeholder="#f89406" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@pink</label>
                <div class="controls">
                  <input type="text" placeholder="#c3325f" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@purple</label>
                <div class="controls">
                  <input type="text" placeholder="#7a43b6" />
                </div>
              </div>
              <h3>Sprites</h3>
              <div class="control-group">
                <label class="control-label">@iconSpritePath</label>
                <div class="controls">
                  <input type="text" placeholder="'../img/glyphicons-halflings.png'" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@iconWhiteSpritePath</label>
                <div class="controls">
                  <input type="text" placeholder="'../img/glyphicons-halflings-white.png'" />
                </div>
              </div>
              <h3>Grid System</h3>
              <div class="control-group">
                <label class="control-label">@gridColumns</label>
                <div class="controls">
                  <input type="text" placeholder="12" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@gridColumnWidth</label>
                <div class="controls">
                  <input type="text" placeholder="60px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@gridGutterWidth</label>
                <div class="controls">
                  <input type="text" placeholder="20px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@gridColumnWidth1200</label>
                <div class="controls">
                  <input type="text" placeholder="70px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@gridGutterWidth1200</label>
                <div class="controls">
                  <input type="text" placeholder="30px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@gridColumnWidth768</label>
                <div class="controls">
                  <input type="text" placeholder="42px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@gridGutterWidth768</label>
                <div class="controls">
                  <input type="text" placeholder="20px" />
                </div>
              </div>
            </div>
            <div class="span4">
              <h3>Typography</h3>
              <div class="control-group">
                <label class="control-label">@sansFontFamily</label>
                <div class="controls">
                  <input type="text" placeholder="'Helvetica Neue', Helvetica, Arial, sans-serif" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@serifFontFamily</label>
                <div class="controls">
                  <input type="text" placeholder="Georgia, 'Times New Roman', Times, serif" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@monoFontFamily</label>
                <div class="controls">
                  <input type="text" placeholder="Menlo, Monaco, 'Courier New', monospace" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@baseFontSize</label>
                <div class="controls">
                  <input type="text" placeholder="14px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@baseFontFamily</label>
                <div class="controls">
                  <input type="text" placeholder="@sansFontFamily" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@baseLineHeight</label>
                <div class="controls">
                  <input type="text" placeholder="20px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@altFontFamily</label>
                <div class="controls">
                  <input type="text" placeholder="@serifFontFamily" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@headingsFontFamily</label>
                <div class="controls">
                  <input type="text" placeholder="inherit" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@headingsFontWeight</label>
                <div class="controls">
                  <input type="text" placeholder="bold" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@headingsColor</label>
                <div class="controls">
                  <input type="text" placeholder="inherit" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@heroUnitBackground</label>
                <div class="controls">
                  <input type="text" placeholder="@grayLighter" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@heroUnitHeadingColor</label>
                <div class="controls">
                  <input type="text" placeholder="inherit" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@heroUnitLeadColor</label>
                <div class="controls">
                  <input type="text" placeholder="inherit" />
                </div>
              </div>
              <h3>Tables</h3>
              <div class="control-group">
                <label class="control-label">@tableBackground</label>
                <div class="controls">
                  <input type="text" placeholder="transparent" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@tableBackgroundAccent</label>
                <div class="controls">
                  <input type="text" placeholder="#f9f9f9" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@tableBackgroundHover</label>
                <div class="controls">
                  <input type="text" placeholder="#f5f5f5" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@tableBorder</label>
                <div class="controls">
                  <input type="text" placeholder="#ddd" />
                </div>
              </div>
              <h3>Forms</h3>
              <div class="control-group">
                <label class="control-label">@placeholderText</label>
                <div class="controls">
                  <input type="text" placeholder="@grayLight" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@inputBackground</label>
                <div class="controls">
                  <input type="text" placeholder="@white" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@inputBorder</label>
                <div class="controls">
                  <input type="text" placeholder="#ccc" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@inputBorderRadius</label>
                <div class="controls">
                  <input type="text" placeholder="3px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@inputDisabledBackground</label>
                <div class="controls">
                  <input type="text" placeholder="@grayLighter" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@formActionsBackground</label>
                <div class="controls">
                  <input type="text" placeholder="#f5f5f5" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@btnPrimaryBackground</label>
                <div class="controls">
                  <input type="text" placeholder="@linkColor" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@btnPrimaryBackgroundHighlight</label>
                <div class="controls">
                  <input type="text" placeholder="darken(@white, 10%)" />
                </div>
              </div>
            </div>
            <div class="span4">
              <h3>Form states &amp; alerts</h3>
              <div class="control-group">
                <label class="control-label">@warningText</label>
                <div class="controls">
                  <input type="text" placeholder="#c09853" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@warningBackground</label>
                <div class="controls">
                  <input type="text" placeholder="#fcf8e3" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@errorText</label>
                <div class="controls">
                  <input type="text" placeholder="#b94a48" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@errorBackground</label>
                <div class="controls">
                  <input type="text" placeholder="#f2dede" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@successText</label>
                <div class="controls">
                  <input type="text" placeholder="#468847" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@successBackground</label>
                <div class="controls">
                  <input type="text" placeholder="#dff0d8" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@infoText</label>
                <div class="controls">
                  <input type="text" placeholder="#3a87ad" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@infoBackground</label>
                <div class="controls">
                  <input type="text" placeholder="#d9edf7" />
                </div>
              </div>
              <h3>Navbar</h3>
              <div class="control-group">
                <label class="control-label">@navbarHeight</label>
                <div class="controls">
                  <input type="text" placeholder="40px" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarBackground</label>
                <div class="controls">
                  <input type="text" placeholder="@grayDarker" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarBackgroundHighlight</label>
                <div class="controls">
                  <input type="text" placeholder="@grayDark" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarText</label>
                <div class="controls">
                  <input type="text" placeholder="@grayLight" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarBrandColor</label>
                <div class="controls">
                  <input type="text" placeholder="@navbarLinkColor" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarLinkColor</label>
                <div class="controls">
                  <input type="text" placeholder="@grayLight" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarLinkColorHover</label>
                <div class="controls">
                  <input type="text" placeholder="@white" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarLinkColorActive</label>
                <div class="controls">
                  <input type="text" placeholder="@navbarLinkColorHover" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarLinkBackgroundHover</label>
                <div class="controls">
                  <input type="text" placeholder="transparent" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarLinkBackgroundActive</label>
                <div class="controls">
                  <input type="text" placeholder="@navbarBackground" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarSearchBackground</label>
                <div class="controls">
                  <input type="text" placeholder="lighten(@navbarBackground, 25%)" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarSearchBackgroundFocus</label>
                <div class="controls">
                  <input type="text" placeholder="@white" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarSearchBorder</label>
                <div class="controls">
                  <input type="text" placeholder="darken(@navbarSearchBackground, 30%)" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@navbarSearchPlaceholderColor</label>
                <div class="controls">
                  <input type="text" placeholder="#ccc" />
                </div>
              </div>
              <h3>Dropdowns</h3>
              <div class="control-group">
                <label class="control-label">@dropdownBackground</label>
                <div class="controls">
                  <input type="text" placeholder="@white" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@dropdownBorder</label>
                <div class="controls">
                  <input type="text" placeholder="rgba(0,0,0,0.2)" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@dropdownLinkColor</label>
                <div class="controls">
                  <input type="text" placeholder="@grayDark" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@dropdownLinkColorHover</label>
                <div class="controls">
                  <input type="text" placeholder="@white" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">@dropdownLinkBackgroundHover</label>
                <div class="controls">
                  <input type="text" placeholder="@linkColor" />
                </div>
              </div>
            </div>
          </div>
        </fieldset>
        <fieldset id="download">
          <header class="page-header">
            <h1>Download</h1>
          </header>
          <button type="submit" class="btn btn-primary btn-download">Customize and Download</button>
          <h4 class="muted">What's included?</h4>
          <p class="muted">Downloads include compiled CSS, compiled and minified CSS, and compiled jQuery plugins, all nicely packed up into a zipball for your convenience.</p>
        </fieldset>
      </form>
    </div>
    <footer role="contentinfo">
      <div class="container">
        <p class="pull-left">Bootstrap Generator built by <a href="http://www.martinbean.co.uk/" rel="author">Martin Bean</a>.</p>
        <p class="pull-right"><a href="https://github.com/martinbean/bootstrap-generator/issues?state=open">Submit issues</a></p>
      </div>
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/application.js"></script>
  </body>
</html>