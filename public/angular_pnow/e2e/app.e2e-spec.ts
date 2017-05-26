import { CribsPage } from './app.po';

describe('cribs App', () => {
  let page: CribsPage;

  beforeEach(() => {
    page = new CribsPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
