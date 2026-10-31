# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

erdetøltid.dk ("Is it beer time?") is a one-page joke site. The whole site is
`index.html`, a static page with no build step, no dependencies, no test suite
and no linter. It shows the Danish headline "Er det øltid?" and the answer
"Ja", which is always "Ja". Nothing is dynamic and nothing should become so.

## Hosting

GitHub Pages serves the `master` branch from the repo root, so a push to
`master` is the deploy. `CNAME` holds the custom domain in punycode
(`xn--erdetltid-p8a.dk` is `erdetøltid.dk`); GitHub reads it from the branch,
so do not delete it. `.nojekyll` keeps Pages from running Jekyll.

## Files

- `index.html`: the page. Inline CSS, an inline script that animates the
  answer growing from 6px until it fills about 80% of the viewport width
  (capped at 344px), and a "Del" (share) button: `navigator.share` where the
  browser has it, otherwise a small menu with "Kopiér link" and a Facebook
  sharer link. No third-party scripts.
- `og.png`: the 1200x630 Open Graph image. It shows the question only, never
  the answer: a share must not spoil the joke. The `og:` meta tags in
  `index.html` use the punycode domain in absolute URLs.
- `googlede3a3ec6610d67c4.html`: Google Search Console verification. Do not
  edit, rename or delete it.
- `README.txt`: the site name only.

## Working on it

- Open `index.html` in a browser to check a change; nothing needs to run.
- Keep the page's text in Danish and the file UTF-8 (the `ø` in the title and
  headline).
- The answer is the point of the site. Keep it "Ja", and keep it off the OG
  image and description.
