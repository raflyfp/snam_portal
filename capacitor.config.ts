import { CapacitorConfig } from '@capacitor/cli';

const config: CapacitorConfig = {
    appId: 'com.snamedika.portal',
    appName: 'SNA Medika Portal',

    webDir: 'public',

    server: {
        url: 'https://sen-recommends-precise-involve.trycloudflare.com',
        cleartext: false
    }
};

export default config;