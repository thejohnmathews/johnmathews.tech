// johnmathews.tech - HomePage.js
//

import React from 'react';
import { Card, Image, Link, Spacer } from '@nextui-org/react';


const HomePage = () => {
    return (
        <div className="bg-slate-800 rounded-lg">
            <header>
                <h1 className="text-slate-400 mt-2 text-large"> Welcome! I'm John. </h1>
            </header>

            <main>
                <div>
                    <Card>
                            <Image
                                isZoomed
                                src="images/meandprez.JPG"
                                alt="John Mathews"
                                objectFit="cover"
                                width="50%"
                                height={320}
                            />
                    </Card>
                </div>

                <div>
                    <section>
                        <h2>Welcome to johnmathews.tech!</h2>
                        <p>
                            Hello! I'm John Mathews, an embedded software engineer for FastFetch by ABCO Systems with a passion for learning new things!
                            I specialize in embedded systems programming, but I wanted to dabble in web development. Welcome to my personal
                            website where you can learn more about me, my projects, and my traveling.

                            I intend to use this space to better understand web development, so if it looks like i am in 2005 for a while,
                            I don't mean it!
                        </p>
                    </section>

                    <section className="mb-8">
                        <h2>Connect with Me</h2>
                        <div>
                            <Link href="https://linkedin.com/in/thejohnmathews">
                                LinkedIn
                            </Link>
                            <Link href="https://github.com/thejohnmathews">
                                GitHub
                            </Link>
                            <Link href="https://instagram.com/john.em">
                                Instagram
                            </Link>
                        </div>
                    </section>
                </div>
            </main>

            <footer>
                <Spacer y={2} />
                <p>© 2024 John Mathews. All rights reserved.</p>
            </footer>
        </div>
    );
};

export default HomePage;
