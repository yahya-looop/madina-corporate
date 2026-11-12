# MADINA Corporate Website — Asset Guide

All public website assets live in `public/assets/` and are referenced with Laravel's `asset()` helper.

## Brand logo
- Primary logo: `public/assets/brand/madina-logo.svg`
- Blade usage: `{{ asset('assets/brand/madina-logo.svg') }}`
- Keep the original master logo outside the public web root as a backup.
- The SVG used on dark header/footer backgrounds must have a transparent background.

## Asset folders
- `images/hero/`: homepage hero and campaign imagery
- `images/company/`: office, showroom, warehouse and company photography
- `images/products/`: product category photography
- `images/services/`: service and technician photography
- `images/dealers/`: dealer network and map visuals
- `images/team/`: team photography
- `images/backgrounds/`: decorative background images
- `models/`: optimized `.glb` models and textures for selective Three.js scenes
- `videos/`: compressed background and company videos
- `icons/`: SVG icons grouped by purpose
- `fonts/`: self-hosted licensed web fonts

Use lowercase kebab-case filenames, prefer WebP for photographs, SVG for logos/icons, and GLB for web 3D models.
