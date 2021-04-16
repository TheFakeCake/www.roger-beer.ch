/**
 * Initialize an IntersectionObserver with a callback that add animate.css
 * classes to observed elements when they enter the viewport.
 *
 * To be animated this way, an HTML element must have the data-animation
 * attribute set with the name of the animation as the value.
 */
export function initOnScrollAnimations() {
    const options = {
        root: null,
        rootMargin: '4px',
        threshold: 0,
    };

    const callback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const animatedElement = entry.target;
                const animation = animatedElement.dataset.animation;

                // Add a callback at the end of the animation to remove the animated__ classes
                animatedElement.addEventListener('animationend', (event) => {
                    event.stopPropagation();
                    animatedElement.classList.remove('animated', 'fast', animation);
                }, { once: true });

                animatedElement.classList.add(animation);

                // Unobserve the element once it has been animated
                observer.unobserve(animatedElement);
            }
        });
    };

    const observer = new IntersectionObserver(callback, options);

    // Add the first animate.css classes to the animated elements and start observing them
    document.querySelectorAll('[data-animation]').forEach(element => {
        element.classList.add('animated', 'fast');
        observer.observe(element);
    });

    return observer;
};
