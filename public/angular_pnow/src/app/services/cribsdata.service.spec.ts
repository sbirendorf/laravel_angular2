import { TestBed, inject } from '@angular/core/testing';

import { CribsdataService } from './cribsdata.service';

describe('CribsdataService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [CribsdataService]
    });
  });

  it('should ...', inject([CribsdataService], (service: CribsdataService) => {
    expect(service).toBeTruthy();
  }));
});
