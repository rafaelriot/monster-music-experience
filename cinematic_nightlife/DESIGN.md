---
name: Cinematic Nightlife
colors:
  surface: '#131313'
  surface-dim: '#131313'
  surface-bright: '#3a3939'
  surface-container-lowest: '#0e0e0e'
  surface-container-low: '#1c1b1b'
  surface-container: '#201f1f'
  surface-container-high: '#2a2a2a'
  surface-container-highest: '#353534'
  on-surface: '#e5e2e1'
  on-surface-variant: '#b9cacb'
  inverse-surface: '#e5e2e1'
  inverse-on-surface: '#313030'
  outline: '#849495'
  outline-variant: '#3b494b'
  surface-tint: '#00dbe9'
  primary: '#dbfcff'
  on-primary: '#00363a'
  primary-container: '#00f0ff'
  on-primary-container: '#006970'
  inverse-primary: '#006970'
  secondary: '#ffb1c3'
  on-secondary: '#66002c'
  secondary-container: '#ff4b89'
  on-secondary-container: '#590026'
  tertiary: '#fff3f0'
  on-tertiary: '#5a1b00'
  tertiary-container: '#ffcfbe'
  on-tertiary-container: '#a83a00'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#7df4ff'
  primary-fixed-dim: '#00dbe9'
  on-primary-fixed: '#002022'
  on-primary-fixed-variant: '#004f54'
  secondary-fixed: '#ffd9e0'
  secondary-fixed-dim: '#ffb1c3'
  on-secondary-fixed: '#3f0019'
  on-secondary-fixed-variant: '#8f0041'
  tertiary-fixed: '#ffdbce'
  tertiary-fixed-dim: '#ffb59a'
  on-tertiary-fixed: '#370e00'
  on-tertiary-fixed-variant: '#802a00'
  background: '#131313'
  on-background: '#e5e2e1'
  surface-variant: '#353534'
typography:
  display-lg:
    fontFamily: Montserrat
    fontSize: 72px
    fontWeight: '900'
    lineHeight: '1.1'
    letterSpacing: -0.04em
  headline-lg:
    fontFamily: Montserrat
    fontSize: 48px
    fontWeight: '800'
    lineHeight: '1.2'
    letterSpacing: -0.02em
  headline-md:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: '700'
    lineHeight: '1.3'
  headline-sm:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: '700'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Hanken Grotesk
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Hanken Grotesk
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  label-lg:
    fontFamily: Hanken Grotesk
    fontSize: 14px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: 0.1em
  headline-lg-mobile:
    fontFamily: Montserrat
    fontSize: 36px
    fontWeight: '800'
    lineHeight: '1.2'
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  unit: 8px
  container-max: 1440px
  gutter: 24px
  margin-desktop: 64px
  margin-mobile: 20px
---

## Brand & Style

This design system embodies an ultra-premium cinematic nightclub aesthetic. It is designed for high-energy music environments where the UI feels like an extension of the light show. The brand personality is aggressive, sophisticated, and deeply immersive.

The visual direction combines **Glassmorphism** with **High-Contrast Neon**. Surfaces are treated as frosted, translucent panels that catch and refract the "light" from vibrant background accents. We leverage metallic silver textures to ground the neon energy with a sense of luxury and hardware-like precision. The emotional response is one of excitement, exclusivity, and digital craftsmanship.

## Colors

The palette is anchored by a deep midnight black (#050505), providing the infinite depth required for neon elements to pop. 

- **Primary (Electric Cyan):** Used for primary actions and active states. It represents the "energy" of the system.
- **Secondary (Hot Pink):** Used for secondary highlights and high-attention notifications.
- **Tertiary (Vibrant Orange):** Reserved for warning states or specific "hot" UI elements like trending tracks.
- **Magenta & Silver:** Magenta provides depth in gradients, while Silver is used for typography and iconography to provide a premium, physical feel.

**Neon Strategy:** Colors should never be used flat. Always apply a 20-40px Gaussian blur "glow" layer behind primary interactive elements to simulate volumetric lighting.

## Typography

The typographic hierarchy is built on high-impact contrast. **Montserrat** is used for all headings to provide a bold, geometric presence. For maximum cinematic effect, use "display-lg" with a metallic silver gradient overlay.

**Hanken Grotesk** serves as the functional workhorse. It is a sharp, contemporary sans-serif that remains legible even when placed over complex, blurred backgrounds. 

**Styling Note:** Labels and metadata should use uppercase with generous letter spacing to evoke the feel of high-end audio equipment interfaces.

## Layout & Spacing

The design system utilizes a **fluid grid** with an 8px base unit. 

- **Desktop:** 12-column grid with 24px gutters. Wide margins (64px) are used to create a sense of focused exclusivity.
- **Mobile:** 4-column grid with 16px gutters and 20px margins.

Spacing should be generous between sections to allow the background glows and glass effects to "breathe." Avoid clutter; the interface should feel like a premium dashboard where every element has its own stage.

## Elevation & Depth

Depth is the defining characteristic of this design system. It is achieved through three layers:

1.  **The Void (Base):** The #050505 background, occasionally broken by deep 3D shadows and radial gradients of primary colors at low opacity (10-15%).
2.  **The Glass (Mid):** Semi-transparent surfaces with a `backdrop-filter: blur(20px)`. These panels have a 1px inner border (stroke) using a linear gradient from white (20% opacity) to white (0% opacity) to simulate a light-catching glass edge.
3.  **The Light (Top):** Interactive elements that emit "light." Buttons and active states use intense `box-shadow` glows matching their color (e.g., a cyan button has a cyan outer glow).

Use **deep 3D shadows** on cards to make them appear as if they are floating significantly above the dark background.

## Shapes

We use a **Rounded (0.5rem)** base for most UI components. This softens the aggressive typography and colors, making the interface feel sophisticated rather than purely "industrial."

- **Standard Elements:** 8px (0.5rem) corner radius.
- **Interactive Containers:** 16px (1rem) corner radius for cards and modal containers.
- **Pill Shapes:** Used exclusively for tags, chips, and the primary "Play" controls to differentiate them from structural navigation.

## Components

### Buttons
Primary buttons use a solid Electric Cyan fill with black text and a matching neon glow. Secondary buttons are "Ghost" style with a 1px silver border and glass backdrop.

### Cards
Cards are the primary expression of glassmorphism. They must feature a subtle noise texture (3% opacity) to enhance the "tactile" glass feel and a 1px top-down gradient border.

### Inputs
Input fields are dark, recessed wells with a 10% white fill and a bottom-only border. Upon focus, the border animates to a full Electric Cyan glow.

### Chips & Tags
Small, pill-shaped elements with high-transparency backgrounds and high-contrast labels. Use these for music genres or "Live" status indicators.

### Music Visualizers
Incorporate "Volumetric" line charts or frequency bars that use the primary-to-secondary gradient (Cyan to Magenta). These should be the most dynamic elements on the screen.