import { CapacitorConfig } from '@capacitor/cli';

const config: CapacitorConfig = {
    appId: 'com.snamedika.portal',
    appName: 'SNA Medika Portal',

    webDir: 'public',



    server: {
        url: 'https://sen-recommends-precise-involve.trycloudflare.com',
        cleartext: false
    }

    /*
    server: {
        allowNavigation: [
            'sen-recommends-precise-involve.trycloudflare.com',
            '*.trycloudflare.com'
        ]
    }
    */

};

export default config;