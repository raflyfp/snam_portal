import { CapacitorConfig } from '@capacitor/cli';

const config: CapacitorConfig = {
    appId: 'com.snamedika.portal',
    appName: 'SNA Medika Portal',

    webDir: 'public',



    server: {
        url: 'https://sen-recommends-precise-involve.trycloudflare.com',
        cleartext: false,
        errorPath: '/index.html'
    }

};

export default config;