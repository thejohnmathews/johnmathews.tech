// johnmathews.tech - HomePage.js
//

import React from 'react';
import {Image, Link, Spacer} from '@nextui-org/react';
import {Card, CardHeader, CardBody, CardFooter, Button} from "@nextui-org/react";
// card doc: https://v1.nextui.org/docs/components/card


const HomePage = () => {
    return (
        <div className="bg-slate-800">
            <main>
                <div>
                    <div className="gap-2 grid grid-cols-12 grid-rows-2 px-8">
                        <Card className="col-span-12 sm:col-span-4 h-[300px]">
                            <CardHeader className="absolute z-10 top-1 flex-col !items-start">
                                <p className="text-tiny text-white/60 uppercase font-bold"></p>
                                <h1 className="text-white font-medium size"> Welcome! I'm John.</h1>
                            </CardHeader>
                            <Image
                                removeWrapper
                                alt="Card background"
                                className="z-0 w-60 h-60 object-cover"
                                src="images/meandprez.JPG"
                            />
                        </Card>
                    </div>
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
