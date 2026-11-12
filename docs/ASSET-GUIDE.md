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


## Homepage hero slider image slots

Place the approved, original product/company images in `public/assets/images/hero/` using these exact filenames:

| Filename | Slide purpose | Recommended image |
|---|---|---|
| `madina-primary-hero.webp` | Slide 1 | Your primary hero product image (replaces the vector fallback) |\n| `industrial-weighing-scale.webp` | Slide 2 | Industrial platform/floor scale in a clean setting |
| `counting-scale.webp` | Slide 3 | Precision counting scale, front three-quarter view |
| `madina-service-support.webp` | Slide 4 | MADINA technician, service or customer-support scene |

Use landscape images (ideally 1600 × 1200 px or larger), WebP format, and keep the product clearly visible with some negative space. The first slide currently uses the existing vector scale illustration as a temporary visual. Replace it with your own image when ready; keep the original file backed up.

The three image paths above are referenced directly by the hero slider. If an image is not yet present, the dark green branded visual fallback remains visible.
