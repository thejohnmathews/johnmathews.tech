// src/HomePage.js
import React from 'react';
import { Card, Image, Link, Spacer } from '@nextui-org/react';

const HomePage = () => {
    return (
        <div>
            <header className="mb-40 text-9xl text-left">
                <h1> Welcome! I'm John. </h1>
            </header>

            <main className="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg p-8 md:space-x-8">
                <div className="w-full md:w-1/2 mb-8 md:mb-0">
                    <Card className="overflow-hidden rounded-lg">
                            <Image
                                isZoomed
                                src="images/meandprez.JPG"
                                alt="John Mathews"
                                objectFit="cover"
                                width="50%"
                                height={320}
                                className="rounded-lg"
                            />
                    </Card>
                </div>

                <div className="w-full md:w-1/2 flex flex-col">
                    <section className="mb-8">
                        <h2 className="text-3xl font-semibold text-gray-800 mb-4">About Me</h2>
                        <p className="text-lg text-gray-600">
                            Hello! I'm John Mathews, an embedded software engineer for FastFetch by ABCO Systems with a passion for learning new things!
                            I specialize in embedded systems programming, but I wanted to dabble in web development. Welcome to my personal
                            website where you can learn more about me, my projects, and my traveling.

                            I intend to use this space to better understand web development, so if it looks like i am in 2005 for a while,
                            I don't mean it!
                        </p>
                    </section>

                    <section className="mb-8">
                        <h2 className="text-3xl font-semibold text-gray-800 mb-4">Connect with Me</h2>
                        <div className="flex flex-col space-y-2">
                            <Link href="https://linkedin.com/in/thejohnmathews" target="_blank" className="text-blue-500 hover:underline">
                                LinkedIn
                            </Link>
                            <Link href="https://github.com/thejohnmathews" target="_blank" className="text-blue-500 hover:underline">
                                GitHub
                            </Link>
                            <Link href="https://instagram.com/john.em" target="_blank" className="text-blue-500 hover:underline">
                                Instagram
                            </Link>
                        </div>
                    </section>

                    <section>
                        <h2 className="text-3xl font-semibold text-gray-800 mb-4">Navigate</h2>
                        <div className="flex flex-col space-y-2">
                            <Link href="#about" className="text-blue-500 hover:underline">
                                About
                            </Link>
                            <Link href="#projects" className="text-blue-500 hover:underline">
                                Projects
                            </Link>
                            <Link href="#contact" className="text-blue-500 hover:underline">
                                Contact
                            </Link>
                        </div>
                    </section>
                </div>
            </main>

            <footer className="mt-8 text-center text-gray-500">
                <Spacer y={2} />
                <p>© 2024 John Mathews. All rights reserved.</p>
            </footer>
        </div>
    );
};

export default HomePage;
